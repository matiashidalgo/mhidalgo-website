addEventListener("fetch", event => {
    const { request } = event;
    if (request.method === 'POST') {
        return event.respondWith(handleRequest(request));
    }
    return event.respondWith(new Response(`The request is incorrect`));
})

/**
 * readRequestBody reads in the incoming request body
 * Use await readRequestBody(..) in an async function to get the string
 * @param {Request} request the incoming request to read from
 */
async function readRequestBody(request) {
    const { headers } = request;
    const contentType = headers.get('content-type') || '';

    if (contentType.includes('application/json')) {
        return JSON.stringify(await request.json());
    } else if (contentType.includes('application/text')) {
        return request.text();
    } else if (contentType.includes('text/html')) {
        return request.text();
    } else if (contentType.includes('form')) {
        const formData = await request.formData();
        const body = {};
        for (const entry of formData.entries()) {
            body[entry[0]] = entry[1];
        }
        return JSON.stringify(body);
    } else {
        // Perhaps some other type of data was submitted in the form
        // like an image, or some other binary data.
        return 'a file';
    }
}

async function isEmail(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

async function isUrl(url) {
    let regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    return regexp.test(url);
}

async function resultGeneration(message) {
    return new Response(
        message,
        {
            headers: {
                "Content-Type": "text/html",
                "Access-Control-Allow-Origin": "*",
                "Access-Control-Allow-Methods": "POST"
            },
        }
    )
}

async function handleRequest(request) {
    const reqBody = await readRequestBody(request);
    let content = "",
        subject = "Contacto en mhidalgo.ar de ",
        validationMessage = "VALIDATION-FAILED",
        reqBodyData = JSON.parse(reqBody);

    if (!reqBodyData.name || "" === reqBodyData.name) {
        return await resultGeneration(validationMessage);
    }
    content += "Nombre: " + reqBodyData.name + "\n";
    subject += reqBodyData.name;

    if (!reqBodyData.email || "" === reqBodyData.email || !await isEmail(reqBodyData.email)) {
        return await resultGeneration(validationMessage);
    }
    content += "Email: " + reqBodyData.email + "\n";

    if (!reqBodyData.comment || "" === reqBodyData.comment) {
        return await resultGeneration(validationMessage);
    }
    content += "Comentario: " + reqBodyData.comment + "\n";

    if (reqBodyData.website && "" !== reqBodyData.website && await isUrl(reqBodyData.website)) {
        content += "Website: " + reqBodyData.website + "\n";
        subject += ' del website ' + reqBodyData.website;
    }

    let send_request = new Request(
        "https://api.mailchannels.net/tx/v1/send",
        {
            "method": "POST",
            "headers": {
                "content-type": "application/json",
            },
            "body": JSON.stringify({
                "personalizations": [
                    {
                        "to": [
                            {
                                "email": "chuj4pr0@gmail.com",
                                "name": "Matias Hidalgo"
                            }
                        ]
                    }
                ],
                "from": {
                    "email": "me@mhidalgo.ar",
                    "name": "Matias Hidalgo Sender",
                },
                "subject": subject,
                "content": [
                    {
                        "type": "text/plain",
                        "value": content,
                    }
                ],
            }),
        }
    );

    // only send the mail on "POST", to avoid spiders, etc.
    if( request.method === "POST" ) {
        const resp = await fetch(send_request);
        if (resp.status !== 200 && resp.status !== 202) {
            return await resultGeneration("ERROR: " + resp.statusText);
        }
    }

    return await resultGeneration("OK");
}
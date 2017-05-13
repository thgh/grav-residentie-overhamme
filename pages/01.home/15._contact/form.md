---
title: 'Contact opnemen'
body_classes: 'text inverse'
form:
    id: contact-bottom
    template: form-messages
    fields:
        -
            name: aanhef
            label: Aanspreektitel
            type: select
            options:
                - Dhr.
                - Mevr.
        -
            name: name
            label: 'Voornaam + naam'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: E-mail
            type: email
            outerclasses: floating
        -
            name: phone
            label: Telefoon
            type: tel
            outerclasses: floating
        -
            name: streetAddress
            label: 'Straat + nr'
            type: text
            outerclasses: floating
        -
            name: zip
            label: Postcode
            type: text
            classes: input-xs
            outerclasses: floating
        -
            name: city
            label: Gemeente
            type: text
            outerclasses: floating
        -
            name: message
            label: Bericht
            placeholder: 'Stel hier je vragen...'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Versturen
    process:
        -
            email:
                subject: '[residentieoverhamme.be] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Dank u wel voor de interesse!'
---


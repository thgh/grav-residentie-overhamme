---
title: 'Contact opnemen'
body_classes: 'text inverse'
menu: Contact
visible: true
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
            autocomplete: 'on'
            type: text
            outerclasses: col-5
            validate:
                required: true
        -
            name: email
            label: E-mail
            type: email
            outerclasses: floating col-2
        -
            name: phone
            label: Telefoon
            type: tel
            outerclasses: col-3
        -
            name: streetAddress
            label: 'Straat + nr'
            type: text
            outerclasses: floating col-2
        -
            name: zip
            label: Postcode
            type: text
            classes: input-xs
            outerclasses: floating col-1
        -
            name: city
            label: Gemeente
            type: text
            outerclasses: col-2
        -
            name: message
            label: Bericht
            placeholder: 'Stel hier je vragen...'
            type: textarea
            outerclasses: col-5
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


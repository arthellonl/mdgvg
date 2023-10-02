---
title: Contact

form:
   name: ajax-test-form
   action: '/'
   template: form-messages
   refresh_prevention: true
   keep-alive: true
   cache_enabled: false

   fields:
      name:
          label: Naam
          placeholder: Vul je naam in
          autocomplete: on
          type: text
          validate:
            required: true
      
      email:
          label: Email
          placeholder: Vul je emailadres in
          type: email
          validate:
            required: true

      message:
          label: Bericht
          placeholder: Je bericht aan mij
          type: textarea
          validate:
            required: true
      
      alleenechtemensen:
        type: honeypot

   buttons:
      submit:
         type: submit
         value: Sturen!

   process:
      message: 'Bedankt voor je bericht [pages/home/contact.md!]'
      email:
        subject: "Bericht via manondegrootvangelder.nl"
        body: "{% include 'forms/data.html.twig' %}"
        from: "{{ form.value.email|e }}"
        from_name: "{{ form.value.name|e }}"
---








---
title: contact
form:
    keep_alive: true
    name: ajax-test-form
    action: /home
    template: form-messages
    cache_enable: false
    refresh_prevention: true
    fields:
        -
            name: name
            label: Name van pages/modular.md
            placeholder: 'Enter your name from pages/modular.md'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            default: null
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email'
            autofocus: 'off'
            autocomplete: 'on'
            type: email
            default: null
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: Submit
    process:
        message: 'Thank you for your submission!'
---


<div id="form-result">xxx</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#ajax-test-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const result = document.querySelector('#form-result');
        const action = form.getAttribute('action');
        const method = form.getAttribute('method');

        fetch(action, {
            method: method,
            body: new FormData(form)
        })
        .then(function(response) {
            if (response.ok) {
                return response.text();
            } else {
                return response.json();
            }
        })
        .then(function(output) {
            if (result) {
                result.innerHTML = output;
            }
        })
        .catch(function(error) {
            if (result) {
                result.innerHTML = 'Error: ' + error;
            }

            throw new Error(error);
        });
    });
});
</script>
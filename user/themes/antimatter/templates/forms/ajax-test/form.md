---
title: Ajax Test-Form
cache_enable: false

form:
    action: '/forms/ajax-test'
    name: ajax-test-form
    template: form-messages
    refresh_prevention: true
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            default: 
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email'
            autofocus: 'off'
            autocomplete: 'on'
            type: email
            default:
            validate:
                required: true

    buttons:
        -
            type: submit
            value: Submit

    process:
        -
            message: 'Thank you for your feedback!'
---

<div id="form-result"></div>

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
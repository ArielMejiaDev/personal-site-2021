function form() {
    return {
        submitting: false,
        email: '',
        name: '',
        message: '',
        hp_contact_form: '',
        errors: {},
        text: 'Send',
        sent: false,
        submit() {
            this.submitting = true;
            this.text = 'Sending...';
            fetch(`/contact/store`, {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": document.querySelector('input[name="_token"]').value,
                },
                method: 'POST',
                credentials: "same-origin",
                body: JSON.stringify({
                    name: this.name,
                    email: this.email,
                    message: this.message,
                    hp_contact_form: this.hp_contact_form,
                })
            })
                .then(response => response.json()
                    .then(data => {
                        console.log(data)
                        if (data.errors) {
                            this.errors = data.errors;
                            this.submitting = false;
                            return this.text = 'Send';
                        }
                        this.name = '';
                        this.email = '';
                        this.message = '';
                        this.sent = true;
                        return this.text = 'Thanks, email sent.';
                    })
                )
                .catch(errors => {
                    console.log(errors.response.data.errors);
                    this.submitting = false
                });
        }
    }
}

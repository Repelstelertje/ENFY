# ENFY

## Project description

This repository contains the source code for **E-Notifyer**, a small PHP site with a contact form. The pages are written in plain PHP and HTML and can be served without a framework. Form submissions are handled by `send_email.php` which sends an email to a configurable recipient.

## Environment variables

`CONTACT_RECIPIENT` defines the e‑mail address that will receive messages from the contact form. If the variable is not set the application defaults to `info@example.com` as defined in `config.php`.

Example configuration:

```bash
export CONTACT_RECIPIENT=you@example.com
```

## Running locally

Use PHP's built in web server from the project root:

```bash
php -S localhost:8000
```

Visit `http://localhost:8000/index.php` (or `contact.php` to test the form). Ensure your environment variable is set before starting the server so emails are sent to the right address.

## Deployment notes

Configure `CONTACT_RECIPIENT` in your production environment and make sure the PHP `mail()` function is available. Upload the project files to your web host or container and serve them with your preferred HTTP server.

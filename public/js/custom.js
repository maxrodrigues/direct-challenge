/**
 * This configuration was generated using the CKEditor 5 Builder. You can modify it anytime using this link:
 * https://ckeditor.com/ckeditor-5/builder/?redirect=portal#installation/NodgNARATAdCMAYKQMwnQTgKwIBwqgBZcBGBBHLEjEgNl2QgFMA7ZBMYEsDj7vgLqQoAMyj4AhgBMIAoA===
 */

const { ClassicEditor, Autosave, Bold, Essentials, GeneralHtmlSupport, Italic, Paragraph } = window.CKEDITOR;
const LICENSE_KEY =
    'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NTU4MjA3OTksImp0aSI6ImNkYzMwMzBkLTkxMGUtNDllYi04YWU1LTUwODgyMWViMWQxMSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6ImI2YTM2ZGNkIn0.D-4ynQNz_n_W6jV_HFt3ffvNGAJI8ATnUOwkHre_VKsK4RaG9zfCLcwruUlZKR85o7hvE1sJS2mfttzeoaOtyQ';

const editorConfig = {
    toolbar: {
        items: ['undo', 'redo', '|', 'bold', 'italic'],
        shouldNotGroupWhenFull: false
    },
    plugins: [Autosave, Bold, Essentials, GeneralHtmlSupport, Italic, Paragraph],
    htmlSupport: {
        allow: [
            {
                name: /^.*$/,
                styles: true,
                attributes: true,
                classes: true
            }
        ]
    },
    licenseKey: LICENSE_KEY,
    placeholder: 'Type or paste your content here!'
};

ClassicEditor.create(document.querySelector('#editor'), editorConfig);

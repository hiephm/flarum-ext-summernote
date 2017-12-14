System.register('hiephm/flarum-ext-summernote/main', [], function (_export) {
    'use strict';

    return {
        setters: [],
        execute: function () {
            app.initializers.add('acme-hello-world', function () {
                alert('Hello, world!');
            });
        }
    };
});
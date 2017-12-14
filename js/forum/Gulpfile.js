var flarum = require('flarum-gulp');

flarum({
    // files: [
    //     'library/quill.js'
    // ],
    modules: {
        'hiephm/flarum-ext-summernote': [
            'src/**/*.js'
        ]
    }
});
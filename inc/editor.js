/*
 * My Custom Functions
 * CodeMirror editor
 * @since 1.8
 * @agareginyan
 */


// Change editor to CodeMirror
var editor = CodeMirror.fromTextArea(document.getElementById('anarcho_cfunctions_settings[anarcho_cfunctions-content]'), {
    lineNumbers: true,
    matchBrackets: true,
    mode: 'text/x-php', // PHP='text/x-php', HTML+PHP='application/x-httpd-php'.
    indentUnit: 4
});

// Refresh CodeMirror editor after 1 second
setTimeout(function() {
    editor.refresh();
},1);
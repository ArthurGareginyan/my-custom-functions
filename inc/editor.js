/*
 * My Custom Functions
 * CodeMirror editor
 * @since 1.7
 * @agareginyan
 */


// Change editor to CodeMirror
var editor = CodeMirror.fromTextArea(document.getElementById('anarcho_cfunctions_settings[anarcho_cfunctions-content]'), {
    lineNumbers: true,
    matchBrackets: true,
    mode: 'application/x-httpd-php',
    indentUnit: 4
});

// Refresh CodeMirror editor after 1 second
setTimeout(function() {
    editor.refresh();
},1);
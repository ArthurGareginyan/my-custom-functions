/*
 * My Custom Functions
 * CodeMirror editor
 * @since 1.7
 * @agareginyan
 */


var editor = CodeMirror.fromTextArea(document.getElementById('anarcho_cfunctions_settings[anarcho_cfunctions-content]'), {
    lineNumbers: true,
    matchBrackets: true,
    mode: 'application/x-httpd-php',
    indentUnit: 4
});

setTimeout(function() {
    editor.refresh();
},1);
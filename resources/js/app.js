import { basicDark } from 'cm6-theme-basic-dark';
import {autocompletion, closeBrackets, closeBracketsKeymap, completionKeymap} from '@codemirror/autocomplete'
import {defaultKeymap, history, historyKeymap} from '@codemirror/commands'
import {php} from '@codemirror/lang-php'
import {
    bracketMatching,
    defaultHighlightStyle,
    foldGutter,
    foldKeymap,
    indentOnInput,
    syntaxHighlighting
} from '@codemirror/language'
import {lintKeymap} from '@codemirror/lint'
import {highlightSelectionMatches, searchKeymap} from '@codemirror/search'
import {EditorState} from '@codemirror/state'
import {
    crosshairCursor,
    drawSelection,
    dropCursor,
    EditorView,
    highlightActiveLine,
    highlightActiveLineGutter,
    highlightSpecialChars,
    keymap,
    lineNumbers,
    rectangularSelection
} from '@codemirror/view'

import Clipboard from '@ryangjchandler/alpine-clipboard'

import "line-awesome/dist/line-awesome/css/line-awesome.min.css";

Alpine.plugin(Clipboard);

function updateListenerExtension(target) {
    return EditorView.updateListener.of((update) => {
        if (update.docChanged) {
            target.querySelector('#codeMirrorCode').value = update.state.doc.toString();
            target.querySelector('#codeMirrorCode').dispatchEvent(new Event('change'));
        }
    })
}

function b64DecodeUnicode(str) {
    // Going backwards: from bytestream, to percent-encoding, to original string.
    return decodeURIComponent(atob(str).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}

window.CodeMirror = function getCodeMirror(target, current = null) {
    return new EditorView({
        parent: target,
        state: EditorState.create({
            doc: b64DecodeUnicode(current),
            extensions: [
                lineNumbers(),
                highlightActiveLineGutter(),
                highlightSpecialChars(),
                history(),
                foldGutter(),
                drawSelection(),
                dropCursor(),
                updateListenerExtension(target),
                EditorState.allowMultipleSelections.of(true),
                indentOnInput(),
                syntaxHighlighting(defaultHighlightStyle, {fallback: true}),
                bracketMatching(),
                closeBrackets(),
                autocompletion(),
                rectangularSelection(),
                crosshairCursor(),
                highlightActiveLine(),
                highlightSelectionMatches(),
                keymap.of([
                    ...closeBracketsKeymap,
                    ...defaultKeymap,
                    ...searchKeymap,
                    ...historyKeymap,
                    ...foldKeymap,
                    ...completionKeymap,
                    ...lintKeymap,
                ]),
                php({
                    baseLanguage: true,
                    plain: true,
                }),
                basicDark
            ],
        }),
    })
}

let $ = s => [].slice.call(document.querySelectorAll(s));

// log events as they happen:
let t = $('#tags')[0];
t.addEventListener('input', log);
t.addEventListener('change', log);
function log(e) {
    $('#out')[0].textContent = `${e.type}: ${this.value.replace(/,/g,', ')}`;
}

// hook 'em up:
$('input[type="tags"]').forEach(tagsInput);

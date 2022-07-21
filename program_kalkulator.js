function input(number) {
    document.form.textarea.value = document.form.textarea.value + number;
}

function total() {
    var jumlahInputan = document.form.textarea.value;
    document.form.textarea.value = eval(jumlahInputan);
}

function clean() {
    document.form.textarea.value = "";
}

function erase() {
    var jumlahInputan = document.form.textarea.value;
    document.form.textarea.value = jumlahInputan.substring(0, jumlahInputan.length - 1);
}
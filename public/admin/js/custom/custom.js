function checkMaxLength(element, digit) {
    const maxDigits = digit;
    const text = element.value.trim();
    const numericText = text.replace(/\D/g, '');
    const truncatedText = numericText.slice(0, maxDigits);
    element.value = truncatedText;
}
function select2Function(id = 'form') {
    var $select = $("#" + id + " .select2");
    if ($select.data('select2')) {
        console.log("OK");
        $select.select2('destroy');
    }

    $select.select2({
        placeholder: "Select",
        allowClear: true,
        allow: true,
        dropdownParent: $('#' + id),
        width: '100%',
        height: '30px',
    });
}
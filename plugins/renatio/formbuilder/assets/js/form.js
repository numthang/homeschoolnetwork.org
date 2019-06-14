/*
 * Update states options when country is selected
 */
function updateStateDropdown(data) {
    var states = JSON.parse(data.result);

    var stateSelect = $('#country-state select');

    if (stateSelect.length) {
        var emptyOption = stateSelect.find('option:first');

        stateSelect.html('');

        for (var stateId in states) {
            stateSelect.append('<option value="' + stateId + '">' + states[stateId] + '</option>');
        }

        stateSelect.prepend(emptyOption[0].outerHTML);
    }
}

/*
 * Implement nice invalid form fields
 */
$(window).on('ajaxInvalidField', function (event, fieldElement, fieldName, errorMsg, isFirst) {
    var $field = $(fieldElement).closest('.form-group'),
        $help = $('<p />').addClass('help-block');

    if (!$field.length) {
        return;
    }

    event.preventDefault();

    if (errorMsg) {
        $help.text(errorMsg.join(', '));
    }

    $help.addClass('form-field-error-label');
    $field.addClass('has-error');

    // Prevent the next error alert only once
    $(window).one('ajaxErrorMessage', function (event) {
        event.preventDefault();
    });

    if ($('.form-field-error-label', $field).length > 0)
        return;

    $field.append($help);

    // Scroll to the form group
    if (isFirst) {
        $('html, body').animate({scrollTop: $field.offset().top - 100}, 500, function () {
            fieldElement.focus();
        });
    }
});

$(document).on('ajaxPromise', '[data-request]', function () {
    var $form = $(this).closest('form'),
        $help = $('.form-field-error-label', $form);

    if (!$form.length || !$help.length)
        return;

    $help.remove();
    $('.form-group.has-error', $form).removeClass('has-error');
});
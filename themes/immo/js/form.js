$(document).ready(function () {
    var form = $('form')
    form.on('submit', function(e) {
        e.preventDefault()

        // Update button styling
        $('[type=submit]', form)
          .addClass('button--sent')
          .attr('disabled', 'disabled')
          .text('Verstuurd')

        // Submit through AJAX
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            dataType: 'html',
            data: form.serialize(),
            success: function(result) {
                $('#form-result').html('Bedankt voor uw bericht!')
                console.log('Form success', result.length)
            }
        })
    })
})
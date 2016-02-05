/**
 * Created by ahand on 2/4/16.
 */
/**
 * Created by ahand on 2/2/16.
 */

$(document).ready(function(){

    $('#q-up').click(function () {
        $('#quantity').val(function(i, val) { return +val+1 });
    })

    $('#q-down').click(function () {
        if ($('#quantity').val() > 0) {
            $('#quantity').val(function (i, val) {
                return +val - 1
            });
        }
    });
});
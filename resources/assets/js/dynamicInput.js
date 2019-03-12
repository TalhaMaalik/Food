$(document).ready(function () {
    var counter = 1;
    var addHtml = $('#addHtml');
    $('.addmore').click(function () {
        AddRow();
    })


    function AddRow(){
        var html = '<div class="form-group row">\n' +
            '                                        <div class="col-sm-4">\n' +
            '                                        <input type="text" class="form-control" name="item['+counter+'][name]" />' +
            '                                        </div>\n' +
            '                                        <div class="col-sm-4">\n' +
            '                                        <input type="Number" class="form-control" name="item['+counter+'][price]"/>' +
            '                                        </div>\n' +
            '                                        <div class="col-sm-3">\n' +
            '                                        <input type="file" accept="image/*" class="form-control" name="item['+counter+'][image]" />' +
            '                                        </div>\n' ;


        counter++;
        addHtml.append(html);
    }

});
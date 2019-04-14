var Demo = function() {
    var handleList = function() {
     
        $('body').on('click', '.demoDelete', function() {
            // $('#deleteModel').modal('show');
            var id = $(this).data('id');
            setTimeout(function() {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function() {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "admin/blog-ajaxAction",
                data: {'action': 'deleteBlog', 'data': data},
                success: function(data) {
                    handleAjaxResponse(data);
                }
            });
        });
        var form = $('#addBlog');
        var rules = {
            title: {required: true},
            description: {required: true},
            demo_pic: {required: true},
        };
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form,true);
        });
         var form = $('#editBlog');
        var rules = {
            title: {required: true},
            description: {required: true},
        };
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form,true);
        });
       
        
       var dataArr = {};
       var columnWidth = {};
       
        var arrList = {
            'tableID': '#blog-list',
            'ajaxURL': baseurl + "admin/blog-ajaxAction",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSearchApply': [0],
            'noSortingApply': [0],
            'defaultSortColumn': 0,
            'defaultSortOrder': 'desc',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);
    }
    return {
        init: function() {
            handleList();
        }
    }
}();
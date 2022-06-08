$(document).ready(function() {
    var table = $("#userTable").dataTable({
        bProcessing: true,
        sAjaxSource: "get_alumni.php",
        bPaginate: true,
        sPaginationType: "full_numbers",
        iDisplayLength: 10,

        aoColumns: [
            { mData: "id" },
            { mData: "FullName" },
            { mData: "emal" },
            { mData: "dcourse" },
            { mData: "dgrad" },
            {
                mData: "pix",
                aTargets: [0],
                render: function(data) {
                    if (!data) {
                        return '<img src=imagez/def.jpg height=90 width="90" />';
                    } else {
                        return (
                            '<img src="' + "imagez/" + data + '" height=90 width="90" />'
                        );
                    }
                },
            },

            {
                mData: "statuz",
                aTargets: [0],
                mRender: function(data, type, full) {
                    if (data == 1) {
                        return (
                            '<a  class="btn btn-success" style="margin-right: 6px;" href=update_alumni.php?page=null&update_code=0&alumni_id=' +
                            btoa(full.id) +
                            ">ENABLE USER</a>"
                        );
                    } else {
                        return (
                            '<a  class="btn btn-danger" style="margin-right: 6px;" href=update_alumni.php?page=null&update_code=1&alumni_id=' +
                            btoa(full.id) +
                            ">DISABLE USER</a>"
                        );
                    }
                },
            },
        ],

        dom: "Bfrtip",
        buttons: ["csv", "excel", "pdf"],
        columnDefs: [
            { width: "5%", targets: 0 },
            { width: "30%", targets: 1 },
            { width: "10%", targets: 2 },
            { width: "30%", targets: 3 },
            { width: "5%", targets: 4 },
            { width: "5%", targets: 5 },
        ],
        // "columnDefs": [{"render": createManageBtn, "data": null, "targets": [4]}],
    });
});
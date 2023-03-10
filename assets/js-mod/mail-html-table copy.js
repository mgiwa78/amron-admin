"use strict";
// Class definition

var KTDatatableHtmlTableDemo = (function () {
  // Private functions

  // demo initializer
  var demo = function () {
    var datatable = $("#kt_datatable").KTDatatable({
      data: {
        saveState: { cookie: false },
      },
      search: {
        input: $("#kt_datatable_search_query"),
        key: "generalSearch",
      },
      columns: [
        {
          field: "Size",
          type: "number",
        },
        {
          field: "Property ID",
          title: "Property ID",

          autoHide: true,
        },
        {
          field: "Status",
          title: "Status",
          autoHide: false,
          // callback function support for column rendering
          template: function (row) {
            var status = {
              1: {
                title: "Payment Confrimation",
                class: " label-light-warning",
              },
              2: {
                title: "Rent Reminder",
                class: " label-light-danger",
              },
              3: {
                title: "General Mailing",
                class: " label-light-danger",
              },
            };
            return (
              '<span class="label font-weight-bold label-lg' +
              status[row.Status].class +
              ' label-inline h-sm-auto h-xxl-max-content">' +
              status[row.Status].title +
              "</span>"
            );
          },
        },
        {
          field: "Type",
          title: "Type",
          autoHide: false,
          // callback function support for column rendering
          template: function (row) {
            var status = {
              1: {
                title: "Automatic",
                state: "primary",
              },
              2: {
                title: "Manual",
                state: "success",
              },
            };
            return (
              '<span class="label label-' +
              status[row.Type].state +
              ' label-dot mr-2"></span><span class="font-weight-bold text-' +
              status[row.Type].state +
              '">' +
              status[row.Type].title +
              "</span>"
            );
          },
        },
      ],
    });

    $("#kt_datatable_search_status").on("change", function () {
      datatable.search($(this).val().toLowerCase(), "Status");
    });

    $("#kt_datatable_search_type").on("change", function () {
      datatable.search($(this).val().toLowerCase(), "Type");
    });

    $("#kt_datatable_search_status, #kt_datatable_search_type").selectpicker();
  };

  return {
    // Public functions
    init: function () {
      // init dmeo
      demo();
    },
  };
})();

jQuery(document).ready(function () {
  KTDatatableHtmlTableDemo.init();
});

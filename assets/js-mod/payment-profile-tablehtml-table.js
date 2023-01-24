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
          field: "DepositPaid",
          type: "number",
        },
        {
          field: "OrderDate",
          type: "date",
          format: "YYYY-MM-DD",
        },
        {
          field: "Type",
          title: "Type",
          autoHide: false,
          // callback function support for column rendering
          template: function (row) {
            var status = {
              1: {
                title: "Service Charge",
                class: " label-light-primary",
              },
              2: {
                title: "Property",
                class: " label-light-success",
              },
              3: {
                title: "Plot",
                class: " label-light-info",
              },
              4: {
                title: "Rent",
                class: " label-light-warning",
              },
            };
            return (
              '<span class="label font-weight-bold label-lg' +
              status[row.Type].class +
              ' label-inline">' +
              status[row.Type].title +
              "</span>"
            );
          },
        },
        {
          field: "Status",
          title: "Status",
          autoHide: false,
          // callback function support for column rendering
          template: function (row) {
            var status = {
              1: {
                title: "Disabled",
                state: "danger",
              },
              2: {
                title: "Active",
                state: "primary",
              },
              3: {
                title: "Active",
                state: "success",
              },
            };
            return (
              '<span class="label label-' +
              status[row.Status].state +
              ' label-dot mr-2"></span><span class="font-weight-bold text-' +
              status[row.Status].state +
              '">' +
              status[row.Status].title +
              "</span>"
            );
          },
        },
      ],
    });

    $("#kt_datatable_search_status").on("change", function () {
      datatable.search($(this).val().toLowerCase(), "Type");
    });

    $("#kt_datatable_search_type").on("change", function () {
      datatable.search($(this).val().toLowerCase(), "Status");
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

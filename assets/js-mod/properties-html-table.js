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
          field: "Typology",
          title: "Typology",
          autoHide: false,
          // callback function support for column rendering
          template: function (row) {
            var status = {
              1: {
                title: "2 Bedroom Detached Bungalow",
                class: " label-light-warning",
              },
              2: {
                title: "4 Bedroom with pent house",
                class: " label-light-danger",
              },
              3: {
                title: "4 Bedroom Semi-Detached Duplex",
                class: " label-light-primary",
              },
              4: {
                title: "5 Bedroom Detached Duplex",
                class: " label-light-success",
              },
              5: {
                title: "2 Bedroom Detached with BQ",
                class: " label-light-info",
              },
              6: {
                title: "3 Bedroom Semi-Detached Bungalow",
                class: " label-light-danger",
              },
              7: {
                title: "3 Bedroom Block Of Flat",
                class: " label-light-warning",
              },
              7: {
                title: "2 Bedroom Block Of Flat",
                class: " label-light-warning",
              },
              7: {
                title: "2 Bedroom Semi-Detached Bungalow",
                class: " label-light-warning",
              },
            };
            return (
              '<span class="label font-weight-bold label-lg' +
              status[row.Typology].class +
              ' label-inline h-sm-auto h-xxl-max-content">' +
              status[row.Typology].title +
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
                title: "Unavailable",
                state: "danger",
              },
              2: {
                title: "Rent",
                state: "primary",
              },
              3: {
                title: "Sale",
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
      datatable.search($(this).val().toLowerCase(), "Typology");
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

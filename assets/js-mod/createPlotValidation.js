FormValidation.formValidation(document.getElementById("add_property_form"), {
  fields: {
    plot_number: {
      validators: {
        notEmpty: {
          message: "Plot number is required",
        },
      },
    },
    plot_house_typology: {
      validators: {
        notEmpty: {
          message: "Plot location is required",
        },
      },
    },

    plot_sale_price: {
      validators: {
        notEmpty: {
          message: "Sale price is required",
        },
        digits: {
          message: "The value is not a valid price",
        },
      },
    },
    plot_lenght: {
      validators: {
        notEmpty: {
          message: "Plot length is required",
        },
        digits: {
          message: "The value is not a number",
        },
      },
    },
    plot_breadth: {
      validators: {
        notEmpty: {
          message: "Plot breadth is required",
        },
        digits: {
          message: "The value is not a valid number",
        },
      },
    },
    plot_location: {
      validators: {
        notEmpty: {
          message: "Please select property phase option",
        },
      },
    },
    plot_phase: {
      validators: {
        notEmpty: {
          message: "Please select property phase option",
        },
      },
    },
    plot_installment: {
      validators: {
        notEmpty: {
          message: "Plot Installment is required",
        },
      },
    },
  },

  plugins: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  },
});

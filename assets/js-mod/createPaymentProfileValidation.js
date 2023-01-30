FormValidation.formValidation(document.getElementById("payment_profile_form"), {
  fields: {
    client_payment_id: {
      validators: {
        notEmpty: {
          message: "Client Payment ID is required",
        },
      },
    },

    client_f_name: {
      validators: {
        notEmpty: {
          message: "Client First Name Is Required",
        },
      },
    },
    client_l_name: {
      validators: {
        notEmpty: {
          message: "Client First Name Is Required",
        },
      },
    },

    amount_to_pay: {
      validators: {
        notEmpty: {
          message: "Amount Due Is Required",
        },
        digits: {
          message: "The value is not a valid price",
        },
      },
    },
    property_bedroom_amount: {
      validators: {
        notEmpty: {
          message: "Bedroom number is required",
        },
        digits: {
          message: "The value is not a number",
        },
      },
    },

    payment_type: {
      validators: {
        notEmpty: {
          message: "Payment Type Is Required",
        },
      },
    },

    property_location: {
      validators: {
        choice: {
          message: "Property Location Is Required",
        },
      },
    },

    property_phase: {
      validators: {
        choice: {
          message: "Please select Property Phase",
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

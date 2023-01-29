FormValidation.formValidation(document.getElementById("tenant_profile_form"), {
  fields: {
    tenant_id: {
      validators: {
        notEmpty: {
          message: "Client Payment ID is required",
        },
      },
    },

    tenant_f_name: {
      validators: {
        notEmpty: {
          message: "Client First Name Is Required",
        },
      },
    },
    tenant_l_name: {
      validators: {
        notEmpty: {
          message: "Client Last Name Is Required",
        },
      },
    },

    tenant_property_type: {
      validators: {
        notEmpty: {
          message: "Tenant type is required",
        },
      },
    },
    tenant_rent_amount: {
      validators: {
        notEmpty: {
          message: "Bedroom number is required",
        },
        digits: {
          message: "The value is not a number",
        },
      },
    },

    rental_installment: {
      validators: {
        notEmpty: {
          message: "Payment Type Is Required",
        },
      },
    },

    property_location: {
      validators: {
        notEmpty: {
          message: "Property Location Is Required",
        },
      },
    },

    property_phase: {
      validators: {
        notEmpty: {
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

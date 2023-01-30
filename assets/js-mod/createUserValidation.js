FormValidation.formValidation(document.getElementById("add_new_user"), {
  fields: {
    user_id: {
      validators: {
        notEmpty: {
          message: "User ID is required",
        },
      },
    },

    user_f_name: {
      validators: {
        notEmpty: {
          message: "User First Name Is Required",
        },
      },
    },
    user_email: {
      validators: {
        notEmpty: {
          message: "User Email is required",
        },
      },
    },
    user_l_name: {
      validators: {
        notEmpty: {
          message: "User Last Name Is Required",
        },
      },
    },

    user_property_type: {
      validators: {
        notEmpty: {
          message: "User type is required",
        },
      },
    },
    user_password: {
      validators: {
        notEmpty: {
          message: "User Password is required",
        },
        password: {
          message: "Invalid Password",
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

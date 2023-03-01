const paymentBtn = document.getElementById("kt_login_signin_submit");
const paymentForm = document.getElementById("paymentForm");
paymentBtn.addEventListener("click", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: "pk_test_04ce7b3f751546859d4307b453c37740a7bf55ac", // Replace with your public key
    email: "mail@email.com",
    amount: 40000,
    // email: document.getElementById("email-address").value,
    // amount: document.getElementById("amount").value * 100,
    ref: "" + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function () {
      alert("Window closed.");
    },
    callback: function (response) {
      document.getElementById("refrence").value = response.reference;
      paymentForm.submit();
      let message = "Payment complete! Reference: " + response.reference;
      alert(message);
    },
  });

  handler.openIframe();
}

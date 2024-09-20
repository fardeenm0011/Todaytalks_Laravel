<div class="container-fluid form-head">
    <div class="row h-100">
        <div class="col-12 col-sm-5 col-xl-5 left-pannel">
            <div class="form-img">
                <img class="img-fluid" src="{{ asset('assets/img/mobile_num.svg') }}" alt="form-design">
            </div>
        </div>
        <div class="col-12 col-sm-7 col-xl-7 right-pannel">
            <div class="form-items mx-auto my-auto" id="process-1">
                <h4 class="form-title">Enter Your Mobile Number</h4>
                    <p class="p-0 m-0 form-desc mb-1">We will send you a one-time password to this mobile number</p>
                    <div id="otp-form">
                        <div class="mb-4">
                            <input class="form-control input-number" id="mobile_num" type="number" name="mobile" style="background-color:#E1E5EE !important;" placeholder="Mobile Number" required>
                            <span class="error">Kindly Enter 10 digit mobile number.</span>
                        </div>
                        <div class="form-button">
                            <button id="button" class="text-uppercase next-btn" type="button" onclick="switchToProcess2()">Get OTP</button>
                        </div>
                    </div>
            </div>
            <div class="form-items px-2 px-sm-5 mx-auto my-auto" id="process-2" style="display: none;">
                <h4 class="form-title">Enter Verification Code</h4>
                <p class="p-0 m-0 form-desc mb-1">We are automatically detecting an SMS sent to your mobile number ******7219</p>
                <div id="otp-verification-form">
                    <div class="mb-4 d-flex justify-content-start align-items-start gap-3 flex-row flex-wrap">
                        <input type="number" class="form-control otp-input" id="input-1" maxlength="1" required>
                        <input type="number" class="form-control otp-input" id="input-2" maxlength="1" required>
                        <input type="number" class="form-control otp-input" id="input-3" maxlength="1" required>
                        <input type="number" class="form-control otp-input" id="input-4" maxlength="1" required>
                    </div>
                    <div class="form-button">
                        <button id="submit" class="text-uppercase next-btn w-sm-100 w-md-50" type="button" onclick="switchToProcess3()">Verify</button>
                    </div>
                </div>
            </div>
            <div class="form-items-3 px-2 px-sm-5 mx-auto my-auto" id="process-3" style="display: none;">
                <i class="fa-solid fa-circle-check"></i>
                <h2>Successful!</h2>
                <p>Your Mobile number has been successfully verified</p>
            </div>
        </div>
    </div>
</div>

<script>
    function switchToProcess2() {
        const mobileNumInput = document.getElementById('mobile_num');
        const errorMessage = document.querySelector('.error');

        // Validate the length of mobile number
        if (mobileNumInput.value.length !== 10 || isNaN(mobileNumInput.value)) {
            errorMessage.style.display = 'block'; // Show the error message
        } else {
            errorMessage.style.display = 'none'; // Hide the error message if valid
            document.getElementById('process-1').style.display = 'none'; // Hide process-1
            document.getElementById('process-2').style.display = 'block'; // Show process-2
        }
    }

    function switchToProcess3() {
        const otpInputs = document.querySelectorAll('.otp-input');
        let otpCode = '';
        otpInputs.forEach(input => {
            otpCode += input.value;
        });

        // Assuming that OTP should be '1234' for demonstration purposes
        const validOTP = '1234';

        if (otpCode === validOTP) {
            document.getElementById('process-2').style.display = 'none'; // Hide process-2
            document.getElementById('process-3').style.display = 'inline'; // Show process-3
        } else {
            alert('Invalid OTP. Please try again.');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const mobileNumInput = document.getElementById('mobile_num');

        // Restrict mobile number input to 10 digits
        mobileNumInput.addEventListener('input', function() {
            this.value = this.value.slice(0, 10); // Limit input to 10 characters
        });

        const otpInputs = document.querySelectorAll('.otp-input');

        otpInputs.forEach((input, index) => {
            input.addEventListener('input', function() {
                if (this.value.length > 1) {
                    this.value = this.value.slice(0, 1);
                }

                if (this.value.length === 1) {
                    const nextInput = otpInputs[index + 1];
                    if (nextInput) {
                        nextInput.focus();
                    }
                    this.classList.add('filled');
                } else if (this.value.length === 0) {
                    const prevInput = otpInputs[index - 1];
                    if (prevInput) {
                        prevInput.focus();
                    }
                    this.classList.remove('filled', 'error');
                }
            });
            if (input.value.length === 1) {
                input.classList.add('filled');
            }
        });
    });
</script>
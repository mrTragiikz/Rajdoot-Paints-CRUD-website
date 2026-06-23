<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Dealer — Rajdoot Paints</title>

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap"></noscript>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css"></noscript>

    <link rel="stylesheet" href="css/pc/navbar.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/navbar.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/become-dealer.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/become-dealer.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="css/pc/footer.css" media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="css/mobile/footer.css" media="screen and (max-width: 1024px)">
</head>
<body>

<?php include 'components/navbar.php'; ?>

<main style="padding-top: 100px;">
<div class="bd-page">

    <!-- Back breadcrumb -->
    <div class="bd-breadcrumb">
        <div class="bd-breadcrumb-inner">
            <a href="dealer.php"><i class="bi bi-arrow-left"></i> Back to Dealers</a>
        </div>
    </div>

    <div class="bd-container">

        <!-- Form state -->
        <div class="bd-form-wrap" id="bdFormWrap">
            <div class="bd-form-header">
                <span class="bd-eyebrow">Dealer Application</span>
                <h1 class="bd-title">Become a Rajdoot Dealer</h1>
                <p class="bd-sub">Tell us a little about yourself and your business. Our team will review your application and get in touch within 2–3 business days.</p>
            </div>

            <form class="bd-form" id="bdForm">
                <div class="bd-form-section">
                    <h3 class="bd-section-title"><i class="ph-light ph-user"></i> Personal Details</h3>
                    <div class="bd-field">
                        <label for="bdName">Full Name <span>*</span></label>
                        <input type="text" id="bdName" name="name" placeholder="e.g. Suresh Shrestha" required>
                    </div>
                    <div class="bd-field-row">
                        <div class="bd-field">
                            <label for="bdPhone">Phone Number <span>*</span></label>
                            <input type="tel" id="bdPhone" name="phone" placeholder="e.g. +977-98XXXXXXXX" required>
                        </div>
                        <div class="bd-field">
                            <label for="bdEmail">Email Address <span>*</span></label>
                            <input type="email" id="bdEmail" name="email" placeholder="e.g. you@example.com" required>
                        </div>
                    </div>
                </div>

                <div class="bd-form-section">
                    <h3 class="bd-section-title"><i class="ph-light ph-storefront"></i> Business Details</h3>
                    <div class="bd-field">
                        <label for="bdShopName">Shop Name <span>*</span></label>
                        <input type="text" id="bdShopName" name="shop_name" placeholder="e.g. Shrestha Hardware Store" required>
                    </div>
                    <div class="bd-field-row">
                        <div class="bd-field">
                            <label for="bdProvince">Province <span>*</span></label>
                            <select id="bdProvince" name="province" required>
                                <option value="" disabled selected>Select province</option>
                                <option value="Koshi">Koshi</option>
                                <option value="Madhesh">Madhesh</option>
                                <option value="Bagmati">Bagmati</option>
                                <option value="Gandaki">Gandaki</option>
                                <option value="Lumbini">Lumbini</option>
                                <option value="Karnali">Karnali</option>
                                <option value="Sudurpashchim">Sudurpashchim</option>
                            </select>
                        </div>
                        <div class="bd-field">
                            <label for="bdWard">Ward Number <span>*</span></label>
                            <input type="text" id="bdWard" name="ward" placeholder="e.g. 4" required>
                        </div>
                    </div>
                    <div class="bd-field">
                        <label for="bdLocation">Location / City <span>*</span></label>
                        <input type="text" id="bdLocation" name="location" placeholder="e.g. Bharatpur, Chitwan" required>
                    </div>
                    <div class="bd-field">
                        <label for="bdDetails">Additional Details</label>
                        <textarea id="bdDetails" name="details" placeholder="Tell us more about your shop or business (optional)" rows="3"></textarea>
                    </div>
                </div>

                <label class="bd-checkbox">
                    <input type="checkbox" required>
                    <span>I confirm the above details are accurate and agree to be contacted by Rajdoot Paints regarding this application.</span>
                </label>

                <div class="bd-btn-row">
                    <a href="dealer.php" class="bd-cancel">Cancel</a>
                    <button type="submit" class="bd-submit">Submit Application</button>
                </div>
            </form>
        </div>

        <!-- Success state -->
        <div class="bd-success-wrap" id="bdSuccessWrap" hidden>
            <div class="bd-success-icon"><i class="bi bi-check-lg"></i></div>
            <h2>Thank You!</h2>
            <p>Thank you for submitting your inquiry. Our team will review your application and contact you as soon as possible.</p>
            <a href="dealer.php" class="bd-success-btn">Back to Dealers</a>
        </div>

    </div>
</div>
</main>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/index.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js" defer></script>
<script src="Java/main.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('bdForm');
    const formWrap = document.getElementById('bdFormWrap');
    const successWrap = document.getElementById('bdSuccessWrap');
    const submitBtn = form.querySelector('.bd-submit');

    const bdWard = document.getElementById('bdWard');
    if (bdWard) {
        bdWard.setAttribute('inputmode', 'numeric');
        bdWard.addEventListener('input', () => {
            bdWard.value = bdWard.value.replace(/\D/g, '');
        });
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const originalLabel = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.classList.add('btn-loading');
        submitBtn.textContent = 'Submitting...';

        try {
            const res = await fetch('dealer-submit.php', {
                method: 'POST',
                body: new FormData(form)
            });
            const data = await res.json();

            if (data.ok) {
                formWrap.hidden = true;
                successWrap.hidden = false;
                successWrap.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                alert(data.message || 'Something went wrong. Please try again.');
            }
        } catch (err) {
            alert('Network error. Please check your connection and try again.');
        } finally {
            submitBtn.disabled = false;
            submitBtn.classList.remove('btn-loading');
            submitBtn.textContent = originalLabel;
        }
    });
});
</script>
</body>
</html>

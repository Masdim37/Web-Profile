document.addEventListener('DOMContentLoaded', () => {
    // Memulai request AJAX ke backend PHP
    fetch('data.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            //Render Header & Profile Info
            document.getElementById('cv-name').innerText = data.profile.name;
            document.getElementById('cv-summary').innerText = data.profile.summary;

            //Render Contacts
            const contactInfo = document.getElementById('contact-info');
            contactInfo.innerHTML = `
                <div class="contact-item"><img src="asset/Location.png"><span>${data.profile.location}</span></div>
                <a href="https://api.whatsapp.com/send/?phone=6281290071606" class="contact-item"><img src="asset/whatsapp.png"><span>${data.profile.phone}</span></a>
                <a href="https://github.com/Masdim37" class="contact-item"><img src="asset/github.png"><span>${data.profile.github}</span></a>
                <a href="mailto:dhimas.hfzh375@gmail.com" class="contact-item"><img src="asset/email.png"><span>${data.profile.email}</span></a>
                <a href="https://www.linkedin.com/in/muhammad-dhimas-hafizh-fathurrahman-4a7a2131b/" class="contact-item"><img src="asset/LinkedIn.png"><span>${data.profile.linkedin}</span></a>
                <a href="https://www.instagram.com/dhmzz._375/" class="contact-item"><img src="asset/instagram.png"><span>${data.profile.instagram}</span></a>
            `;

            //Render Education
            const educationList = document.getElementById('education-list');
            educationList.innerHTML = '';
            data.education.forEach(edu => {
                educationList.innerHTML += `
                    <div class="item-block">
                        <div class="item-period">${edu.period}</div>
                        <div class="item-title">${edu.institution}</div>
                        <div>${edu.major}</div>
                        <div>${edu.grade}</div
                    </div>
                `;
            });

            //Render Skills
            const skillsList = document.getElementById('skills-list');
            skillsList.innerHTML = '';
            data.skills.forEach(skill => {
                skillsList.innerHTML += `<li>${skill}</li>`;
            });

            //Render Work Experience
            const experienceList = document.getElementById('experience-list');
            experienceList.innerHTML = '';
            data.experience.forEach(exp => {
                let responsibilities = exp.responsibilities.map(item => `<li>${item}</li>`).join('');
                experienceList.innerHTML += `
                    <div class="item-block">
                        <div class="item-period">${exp.period}</div>
                        <div class="item-title">${exp.title}</div>
                        <ul>${responsibilities}</ul>
                    </div>
                `;
            });

            //Render Organization Experience
            const organizationList = document.getElementById('organization-list');
            organizationList.innerHTML = '';
            data.organization.forEach(org => {
                let responsibilities = org.responsibilities.map(item => `<li>${item}</li>`).join('');
                let institution = org.institution ? `<div>${org.institution}</div>` : '';
                organizationList.innerHTML += `
                    <div class="item-block">
                        <div class="item-period">${org.period}</div>
                        <div class="item-title">${org.title}</div>
                        ${institution}
                        <ul>${responsibilities}</ul>
                    </div>
                `;
            });
        })
        .catch(error => {
            console.error('Error fetching CV data:', error);
            //Jika error/server mati, ubah tulisan loading jadi pesan error
            document.getElementById('cv-name').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
            document.getElementById('cv-summary').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
            document.getElementById('contact-info').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
            document.getElementById('education-list').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
            document.getElementById('skills-list').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
            document.getElementById('experience-list').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
            document.getElementById('organization-list').innerText = "Gagal memuat data CV. Pastikan server berjalan.";
        });
});
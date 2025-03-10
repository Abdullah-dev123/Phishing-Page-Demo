Simple Phishing Page Demo

🚨 Disclaimer

This project is for educational and cybersecurity awareness purposes only. It is designed to demonstrate how phishing attacks work so that individuals and organizations can better protect themselves. Do not use this for illegal or unethical activities. The author is not responsible for any misuse of this code.

📌 About This Project

This repository contains a simple phishing page demo to simulate how attackers attempt to steal user credentials. The goal is to raise awareness about phishing attacks and how users can protect themselves against such threats.

⚠️ Ethical & Legal Considerations

This project should only be used for ethical hacking and cybersecurity education.

Do not use this for malicious purposes.

Do not deploy this script on a live server without explicit permission.

Unauthorized use of phishing techniques is illegal and can result in severe consequences.

🛠️ How It Works

The phishing page mimics a login page (e.g., Google Login UI).

When a user enters their credentials, the data is captured and stored in a data.txt file.

The user is then redirected to the legitimate Google login page to make the attack appear real.

🔒 How to Protect Against Phishing

Always check the URL before entering login credentials.

Enable multi-factor authentication (MFA) to add an extra layer of security.

Do not click on suspicious links in emails or messages.

Use browser security extensions that detect phishing websites.

Report phishing websites to the authorities.

📂 Repository Contents

index.html - Fake login page

save.php - Captures and stores credentials

data.txt - Stores captured credentials (for educational testing)

🚀 Setting Up Locally (For Educational Testing Only)

Clone the repository:

git clone https://github.com/Abdullah-dev123/Phishing-Page-Demo.git
cd Phishing-Page-Demo

Start a local PHP server:

php -S localhost:8000

Open http://localhost:8000/login.html in your browser.

Or you can use apach2 or any other server if you don't want to use php srever.

📜 License

This project is for educational use only. Unauthorized use for malicious purposes is strictly prohibited.


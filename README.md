# **Tea ☕🔒**  
### **A secure messaging app—No matter what the tea is.**  

> *Private. Encrypted. Undeniably Secure.* 🛡️📲  

![Tea Banner](https://source.unsplash.com/1600x900/?chat,security)  

---

## 🚀 **About Tea**  
**Tea** is a **fully encrypted, private messaging app** designed for **secure communication**. Whether you're sharing **secrets, gossip, or serious conversations**, Tea ensures your messages stay **private**—away from prying eyes.  

🔐 **End-to-End Encryption** – Your messages are encrypted before they leave your device.  
📲 **Fast & Reliable Messaging** – Powered by WebSockets for real-time chat.  
🛡️ **No Data Logs** – We don’t store your messages, metadata, or any personal data.  
🌎 **Cross-Platform** – Works seamlessly on web and mobile.  
🎨 **Modern UI** – Clean, minimal design built with React & TailwindCSS.  

---

## 🛠 **Tech Stack**  

| Technology  | Description |
|-------------|------------|
| **🖥️ Frontend**  | React + TailwindCSS |
| **⚡ Backend**  | Laravel |
| **🔒 Security**  | End-to-End Encryption (E2EE) |
| **💬 Real-time Messaging**  | WebSockets |
| **💽 Database**  | PostgreSQL / MySQL |
| **📜 Authentication**  | Laravel Sanctum / JWT |

---

## 📦 **Installation**  

### **1️⃣ Clone the Repository**  
```sh
git clone https://github.com/yourusername/Tea.git
cd Tea
```

### **2️⃣ Install Dependencies**  
```sh
composer install
npm install
```

### **3️⃣ Set Up Environment**  
```sh
cp .env.example .env
php artisan key:generate
```

### **4️⃣ Configure the Database**  
Edit `.env` with your database credentials:  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tea_messenger
DB_USERNAME=root
DB_PASSWORD=yourpassword
```
Then migrate the database:  
```sh
php artisan migrate --seed
```

### **5️⃣ Start the Servers**  
Run Laravel backend:  
```sh
php artisan serve
```
Run frontend development server:  
```sh
npm run dev
```

---

## 🔒 **Security & Encryption**  
🔑 **End-to-End Encryption (E2EE)** ensures that only the sender and recipient can read messages.  
🕵️‍♂️ **Zero Data Storage** – We don’t keep chat history on our servers.  
🚀 **Self-Destructing Messages** – Optional ephemeral messaging for added privacy.  

---

## 🎯 **Contributing**  
Want to improve Tea? Follow these steps:  

1. **Fork** the repository.  
2. Create a **new branch**:  
   ```sh
   git checkout -b feature-secure-chat
   ```
3. Make changes and **commit**:  
   ```sh
   git commit -m "Added secure chat encryption 🔒"
   ```
4. **Push** to your branch:  
   ```sh
   git push origin feature-secure-chat
   ```
5. Open a **Pull Request** and let’s review it! 🎉  

---

## 🔒 **License**  
This project is open-source under the **MIT License**.  

📢 *No matter what the tea is, your messages are safe.* ☕🔐

---

# **Tea ☕🔥**
#### The #1 tea website for the hottest gossip, government conspiracies, and breakups—all in one place.

> *Spilling tea, serving facts, and keeping you woke 24/7.* 🫖👀

![Tea Banner](https://source.unsplash.com/1600x900/?tea)

---

## 🚀 **About Tea**
Welcome to **Tea**, your go-to destination for the latest **celebrity drama**, **government cover-ups**, and **social scandals**. Whether it’s a **political conspiracy**, a **shocking breakup**, or an **internet feud**, we serve it fresh, fast, and unfiltered.

📰 **Real-time news updates** – Stay informed with the latest gossip and exclusive scoops.
⚡ **Fast and modern UI** – Powered by React and styled with TailwindCSS.
🔒 **Secure and scalable** – Laravel handles the backend magic.
💾 **Seamless database management** – PostgreSQL ensures smooth data handling.

---

## 🛠 **Tech Stack**

| Technology  | Description |
|-------------|------------|
| **🖥️ Frontend**  | React + TailwindCSS |
| **🛢️ Backend**  | Laravel |
| **💽 Database**  | PostgreSQL / MySQL |
| **⚡ API**  | Laravel API routes |
| **📜 Authentication**  | Laravel Sanctum / JWT |
| **🎨 UI Components**  | TailwindCSS |

---

## 📦 **Installation**
Want to run **Tea** on your local machine? Follow these steps!

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
Edit `.env` and set up your database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tea_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
```
Then migrate and seed:
```sh
php artisan migrate --seed
```

### **5️⃣ Start the Server**
Run Laravel backend:
```sh
php artisan serve
```
Run frontend development server:
```sh
npm run dev
```

---

## 🏗 **Project Structure**

```
Tea/
│── app/              # Laravel backend logic
│── public/           # Public assets
│── resources/        # Views, React components
│── routes/           # API routes
│── database/         # Migrations, seeders
│── .env.example      # Environment variables
│── package.json      # Frontend dependencies
│── composer.json     # Backend dependencies
│── tailwind.config.js # TailwindCSS configuration
│── vite.config.js    # Vite setup
```

---

## 🎯 **Contributing**
Want to help us spill the tea? Follow these steps:

1. **Fork** the repository.
2. Create a **new branch**:
   ```sh
   git checkout -b feature-new-tea
   ```
3. Make changes and **commit**:
   ```sh
   git commit -m "Added hot new gossip feature 🔥"
   ```
4. **Push** to your branch:
   ```sh
   git push origin feature-new-tea
   ```
5. Open a **Pull Request** and let's review it! 🎉

---

## 🔒 **License**
This project is open-source under the **MIT License**.

📢 *Stay woke. Stay informed. Stay **Tea**.* ☕🔥

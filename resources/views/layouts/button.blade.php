<style>

.purple-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #8a2be2; /* اللون البنفسجي */
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.purple-button:hover {
  background-color: #6a1cb7; /* تغيير لون الخلفية عند التحويم */
}
  </style>

<style>

body {
  font-family: Arial, sans-serif;
}

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 400px;
}

table, th, td {
  border: 1px solid #ccc;
}



.toggle-switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.toggle-switch input {
  display: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: 0.4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

              </style>
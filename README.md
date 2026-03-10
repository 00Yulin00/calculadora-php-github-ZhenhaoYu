# 📘 Calculadora Refactoritzada — Git & GitHub Workflow

Aquest projecte és una pràctica de refactorització d’una calculadora en PHP utilitzant un flux complet de Git i GitHub: issues, branques, commits, pull requests i merges. L’objectiu és millorar el codi original aplicant bones pràctiques de desenvolupament col·laboratiu.

---

## 🧮 Funcionalitat del projecte

La calculadora rep tres valors via `POST`:

- `primerNumero`
- `segonNumero`
- `operacio` (`s`, `r`, `m`, `d`)

I retorna el resultat de l’operació.

---

# 🗂️ Millores implementades

S’han creat **4 issues**, cadascuna amb la seva branca, commits i Pull Request:

| Issue | Millora | Estat |
|-------|---------|--------|
| #1 | Renombrar variables | ✔ Completat |
| #2 | Crear funció `calcular()` | ✔ Completat |
| #3 | Canvi d’`if/else` a `switch` | ✔ Completat |
| #4 | Control d’errors | ✔ Completat |

---

# 🔧 Detall de les millores

### **1️⃣ Renombrar variables**
- `$n1`, `$n2`, `$op` → `$primerNumero`, `$segonNumero`, `$operacio`
- Millora la llegibilitat del codi.

### **2️⃣ Funció `calcular()`**
- S’encapsula tota la lògica en una funció.
- El codi principal queda més net i modular.

### **3️⃣ Canvi d’`if/else` a `switch`**
- Millora la claredat i escalabilitat del codi.
- Facilita afegir noves operacions en el futur.

### **4️⃣ Control d’errors**
- Evita divisió per zero.
- Gestiona operacions desconegudes.
- Retorna missatges d’error clars.

---

# 🌿 Flux de treball Git utilitzat

Per cada issue:

### ✔ 1. Creació de branca
```bash
  git checkout -b issue-XX-nom-millora
```  
### ✔ 2. Mínim 2 commits
```bash
  git add .
  git commit -m "Primer canvi relacionat amb la millora"
```
```bash
  git add .
  git commit -m "Segon canvi relacionat amb la millora"
```

### ✔ 3. Push i Pull Request
```bash
  git push -u origin issue-XX-nom-millora
```
A GitHub:

- Crear PR  
- Títol: *Millora X — nom de la millora*  
- Descripció: *Fixes #X*  
- Autoassignació  
- Etiqueta (`enhancement`, `refactor`, `bug`)  
- Auto-revisió i aprovació  
- Merge i esborrar branca  

---

# 📜 Historial de commits

Per comprovar el treball realitzat:
  git log --oneline


---

# 🧩 Codi final (resum)

El codi final inclou:

- Variables renombrades  
- Funció `calcular()`  
- `switch` en lloc d’`if/else`  
- Control d’errors  

---

# 🎯 Objectiu aconseguit

Aquesta pràctica demostra:

- Ús correcte d’issues  
- Treball amb branques  
- Commits clars i freqüents  
- Pull Requests amb revisió  
- Refactorització progressiva i organitzada  

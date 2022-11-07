let Pira = [
    [75],
    [95, 64],
    [17, 47, 82],
    [18, 35, 87, 10],
    [20, 4, 82, 47, 65],
    [19, 01, 23, 75, 3, 34],
    [88, 2, 77, 73, 7, 63, 67],
    [99, 65, 4, 28, 6, 16, 70, 92],
    [41, 41, 26, 56, 83, 40, 80, 70, 33],
    [41, 48, 72, 33, 47, 32, 37, 16, 94, 29],
    [53, 71, 44, 65, 25, 43, 91, 52, 97, 51, 14],
    [70, 11, 33, 28, 77, 73, 17, 78, 39, 68, 17, 57],
    [91, 71, 52, 38, 17, 14, 91, 43, 58, 50, 27, 29, 48],
    [63, 66, 4, 68, 89, 53, 67, 30, 73, 16, 69, 87, 40, 31],
    [4, 62, 98, 27, 23, 9, 70, 98, 73, 93, 38, 53, 60, 4, 23],
  ];
  function c(Pira, i, j) {
    if (i == Pira.length) {
      return 0;
    }
    let sum;
    sum =Pira[i][j] + Math.max(c(Pira, i + 1, j), c(Pira, i + 1, j + 1));
    return sum;
  }
  function Max(Pira) {
    return c(Pira, 0, 0);
  }
  
  let cont = 0;
  const div = document.getElementById("PIRAMIDE");
  Pira.forEach((rows) => {
    cont++;
    const parentDiv = document.createElement("div");
    parentDiv.id = "parent" + cont;
    div.appendChild(parentDiv);
    console.log("[");
    rows.forEach((column) => {
      const divParent = document.getElementById("parent" + cont);
      const childDiv = document.createElement("div");
      childDiv.textContent = column;
      divParent.appendChild(childDiv);
      console.log(column);
    });
    console.log("]");
  });
  
  const textSum = document.getElementById("sum");
  textSum.innerHTML = "Total de la Ruta: " + Max(Pira);
  
  function MAXPATH(t, m, n) {
    let pos = [];
    let auxJ;
    for (let i = m - 1; i >= 0; i--) {
      for (let j = 0; j <= i; j++) {
        let aux = false;
        console.log("[ "+i+" ],[ "+j+" ]");
  
        if (t[i + 1][j] > t[i + 1][j + 1]) {
          t[i][j] += t[i + 1][j];
          for (let row = 0; row < pos.length; row++) {
            if (pos[row][0] == i + 1) {
              pos[row][1] = j;
              aux = !aux;
              break;
            }
          }
          if (!aux) {
            pos.push([i + 1, j]);
          }
        } else {
          t[i][j] += t[i + 1][j + 1];
          for (let row = 0; row < pos.length; row++) {
            if (pos[row][0] == i + 1) {
              pos[row][1] = j + 1;
              aux = !aux;
              break;
            }
          }
          if (!aux) {
            pos.push([i + 1, j + 1]);
          }
        }
        console.log(aux);
      }
    }
    console.log(t[0][0]);
    return pos;
  }
  
  let R = MAXPATH(Pira, 14, 14);
  console.log(R);
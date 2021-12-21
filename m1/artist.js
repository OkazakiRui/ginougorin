const temp = (data) => {
  return (`
  <img src="${data.img}" alt="${data.name}の写真">
  <div class="text-gray-900">
    <h2>${data.name}</h2>
    <h3 class="p-0">${data.name}とは</h3>
    <p>${data.discription}</p>
    <h3 class="p-0">出身</h3>
    <p>
      ${data.live}
    </p>
    <h3 class="p-0">生年月日</h3>
    <p>
    ${data.birthday}
    </p>
    <h3 class="p-0">生い立ち</h3>
    <p>
    ${data.story}
    </p>
  </div>
  `)
};

location.hash.slice(1)

fetch("artist.json")
  .then(res => res.json())
  .then(data => {
    const el = document.getElementById("main");
    el.innerHTML = temp(data[Number(location.hash.slice(1)) + -1]);
  });


// const aTemp = (data) => {
//   return (`
//   <a href="/artist.html#${data.id}" class="l-item artist">
//     <img class="shadow-xl" src="${data.img}" alt="${data.name}の写真">
//     <p class="text-pink-500"><em>${data.genle}</em></p>
//     <p>${data.name}</p>
//   </a>
//   `)
// };
// {
//   fetch("http://api.skilljapan.info/api/items")
//     .then(res => res.json())
//     .then(data => {
//       const el = document.getElementById("album");
//       data.forEach(d => {
//         d.genle = (Math.random() * 10) >= 3 ? "EDM" : "ダンスミュージック";
//       });
//       for (let i = 0; i < 4; i++) {
//         const res = data[i];
//         el.innerHTML += aTemp(res);
//       }
//       console.log(data);
//     });

// }
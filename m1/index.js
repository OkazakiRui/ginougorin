const temp = (data) => {
  return (`
  <a href="#" class="l-item artist">
    <img class="shadow-xl" src="${data.jacket_image}" alt="${data.artist}の写真">
    <p class="text-pink-500"><em>${data.genle}</em></p>
    <p>${data.artist} / ${data.title}</p>
  </a>
  `)
}
const aTemp = (data) => {
  return (`
  <a href="/artist.html#${data.id}" class="l-item artist">
    <img class="shadow-xl" src="${data.img}" alt="${data.name}の写真">
    <p class="text-pink-500"><em>${data.genle}</em></p>
    <p>${data.name}</p>
  </a>
  `)
}

fetch("http://api.skilljapan.info/api/items")
  .then(res => res.json())
  .then(data => {
    const el = document.getElementById("album");
    data.forEach(d => {
      d.genle = (Math.random() * 10) >= 3 ? "EDM" : "ダンスミュージック";
    });
    for (let i = 0; i < 8; i++) {
      const res = data[i];
      el.innerHTML += temp(res);
    }
    console.log(data);
  })

fetch("artist.json")
  .then(res => res.json())
  .then(data => {
    const el = document.getElementById("artist");
    for (let i = 0; i < 8; i++) {
      const res = data[i];
      el.innerHTML += aTemp(res);
    }
  })
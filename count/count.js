let counter = document.getElementById("counter");
let saver = document.getElementById("saver");
const countBtn = document.getElementById("countBtn");
const saveBtn = document.getElementById("saveBtn");
const totalBtn = document.getElementById("totalBtn");
const resetBtn = document.getElementById("resetBtn");

let count = 0;
let total = 0;
let saved = [];

const counting = () => {
  count = count + 1;
  updateCount();
};

const saving = () => {
  if (count > 0) saved.push(count);
  if (saved.length > 0) {
    saver.innerText = "Saved Count: ";
    for (let i = 0; i < saved.length; i++) saver.innerText += `  ${saved[i]}  `;
  }
  count = 0;
  updateCount();
};
const totalCount = () => {
  total = saved.reduce((tot, i) => tot + i, 0);
  count = 0;
  if (total > 0) saver.innerText = `Total Count: ${total}`;
  updateCount();
};
const reseting = () => {
  saved = [];
  count = 0;
  saver.innerText = "";
  updateCount();
};

const updateCount = () => (counter.innerText = count);

saveBtn.onclick = saving;
countBtn.onclick = counting;
totalBtn.onclick = totalCount;
resetBtn.onclick = reseting;

'use strict';

document.querySelector('textarea').addEventListener("keydown", function(e) {
  if (e.key === 'Tab') {
    e.preventDefault();
    const val = e.target.value;
    const start = e.target.selectionStart;
    const left = val.substr(0, start);
    const right = val.substr(start, val.length)
    e.target.value = left + "\t" + right;
    e.target.selectionEnd = start + 1;
  }
});

// 修正時刻: Fri 2024/04/12 06:52:16

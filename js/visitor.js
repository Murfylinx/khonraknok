// ดึงข้อมูลจาก HTML
const totalVisitorsElement = document.querySelector('.card-subtitle');
const totalVisitorsText = totalVisitorsElement.textContent.trim();

// แยกข้อความเพื่อให้ได้เฉพาะตัวเลข
const totalVisitors = parseInt(totalVisitorsText);

// แสดงผลยอดผู้เข้าชมเว็บไซต์
console.log('ยอดผู้เยี่ยมชมเว็บไซต์ทั้งหมด:', totalVisitors);

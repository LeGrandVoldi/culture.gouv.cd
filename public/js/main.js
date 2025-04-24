class Agenda {
    constructor() {
        this.currentDate = new Date();
        this.today = new Date();
        this.selectedDate = null;
        this.init();
    }

    init() {
        this.updateHeader();
        this.renderCalendar();
        this.attachEventListeners();
        this.selectDate(new Date());
        this.setupAuthModals();
    }

    setupAuthModals() {
        const loginBtn = document.getElementById('loginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');
        const closeBtns = document.getElementsByClassName('close');

        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'block';
        });

        registerBtn.addEventListener('click', () => {
            registerModal.style.display = 'block';
        });

        Array.from(closeBtns).forEach(btn => {
            btn.addEventListener('click', () => {
                loginModal.style.display = 'none';
                registerModal.style.display = 'none';
            });
        });

        window.addEventListener('click', (e) => {
            if (e.target === loginModal) loginModal.style.display = 'none';
            if (e.target === registerModal) registerModal.style.display = 'none';
        });

        document.getElementById('loginForm').addEventListener('submit', (e) => {
            e.preventDefault();
            loginModal.style.display = 'none';
        });

        document.getElementById('registerForm').addEventListener('submit', (e) => {
            e.preventDefault();
            registerModal.style.display = 'none';
        });
    }

    updateHeader() {
        const monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
            'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        document.getElementById('currentMonth').textContent =
            `${monthNames[this.currentDate.getMonth()]} ${this.currentDate.getFullYear()}`;
    }

    renderCalendar() {
        const calendar = document.getElementById('calendar');
        calendar.innerHTML = '';

        const firstDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), 1);
        const lastDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 0);

        let startingDay = firstDay.getDay() || 7;
        startingDay--;

        for (let i = 0; i < startingDay; i++) {
            const dayElement = this.createDayElement('');
            dayElement.style.opacity = '0.5';
            calendar.appendChild(dayElement);
        }

        for (let day = 1; day <= lastDay.getDate(); day++) {
            const date = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), day);
            const dayElement = this.createDayElement(day);

            if (this.isToday(date)) {
                dayElement.classList.add('today');
            }

            dayElement.addEventListener('click', () => this.selectDate(date));
            calendar.appendChild(dayElement);
        }
    }

    isToday(date) {
        return date.getDate() === this.today.getDate() &&
               date.getMonth() === this.today.getMonth() &&
               date.getFullYear() === this.today.getFullYear();
    }

    createDayElement(content) {
        const div = document.createElement('div');
        div.className = 'calendar-day';
        div.textContent = content;
        return div;
    }

    attachEventListeners() {
        document.getElementById('prevMonth').addEventListener('click', () => {
            this.currentDate.setMonth(this.currentDate.getMonth() - 1);
            this.updateHeader();
            this.renderCalendar();
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            this.currentDate.setMonth(this.currentDate.getMonth() + 1);
            this.updateHeader();
            this.renderCalendar();
        });
    }

    selectDate(date) {
        this.selectedDate = date;

        document.querySelectorAll('.calendar-day').forEach(day => {
            day.classList.remove('active');
            if (day.textContent === date.getDate().toString()) {
                day.classList.add('active');
            }
        });
    }

    formatDate(date) {
        return `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;
    }
}

const agenda = new Agenda();

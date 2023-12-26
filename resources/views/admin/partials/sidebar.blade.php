<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img
                src="vendors/images/deskapp-logo-white.svg"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span
                        ><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('trip.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span
                        ><span class="mtext">Trip</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('seatallocation.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span
                        ><span class="mtext">Seat Allocation</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
# Lightning Sale Point of Sale

Set up the .env file or environment variables for database and LND config!
Or use github.com/lightningsale/LightningSale and `docker-compose up`

## Milestone 1
 1. [X] Set up users and authentication (Security!)
 2. Set up Funding, Peers and Channels
 3. Transactions
 4. Backups and Recovery

## Milestone 2
 1. [ ] Design / UX
 2. [ ] Secure deployments / Auditing

## First setup:
 - git clone https://github.com/lightningsale/LightningSale
 - Copy `.env.dist` to `.env` and modify the variables acordingly to your setup (the only requirement is `EXTERNALIP`)
 - docker-compose up
 - docker-compose exec pos composer install
 - docker-compose exec pos php bin/console doctrine:database:create
 - docker-compose exec pos php bin/console doctrine:schematic:update --force
 - docker-compose exec pos php bin/console app:create:user <-- Create first user

## LightningShop TODO:
 - [ ] Copywriting
 - [ ] Design/Style
 - [ ] Figure out how to copy required certificates from LND to POS
 - [ ] Figure out how to use Macaroons
 - [X] Move POS repo to LightningSale repository
 - [X] Use `LND`s own Dockerfile's https://github.com/lightningnetwork/lnd/tree/master/docker
 - [ ] Use Docker Secrets
 - [ ] Security!

## Components:
 - [X] -LND gRPC Client- Use LND Rest Client
 - [X] Auth Component (Handle owners and Users)
 - [X] QR Code
 - [ ] Payments Dashboard (Should we just use LND as a source of truth, or store all payments/transactions in our own database)


## Setup
 - [ ] Setup a database
 - [ ] Configure settings with environment variabelse or configure them in the `.env` file
 - [ ] Configure wallet / kommunikasjon med LND
 - [ ] Configure exchange 
    - [ ] Select Currency
    - [ ] Select transaction fee (for customer)
    - [ ] Settlement address
    - [ ] Settlement (immediatly, on demand, periodic)
 - [ ] Create first user
 - [ ] Setup script?

## Pages / TODO:
 - [X] Login
 - [ ] Customer details (whitelabel stuff
   - [ ] Node/Wallet details/Status
      - [ ] Channe funding
      - [ ] Wallet funding
   - [ ] Setup user accounts
 - [ ] User details
 - [ ] Dashboard
   - [ ] Create payment request (invoice)
   - [ ] List payments (status) (Select wich payment to show on screen)
   - [ ] Payment details
   - [ ] Screen ID (and what is displayed)
 - [ ] Payment request details screen (Consumer facing)
   - [ ] Login (With screen ID)
   - [ ] Whitelabel "default" screen
   - [ ] Payment request details:
      - [ ] QR-Code
      - [ ] Whitelabel
      - [ ] Serialized payment request
      - [ ] Price in Bitcoin / Selected currency
## Domain model
 - [X] User (base, Cashier, Merchant)
 - [ ] Screens (one pr logged in user?)
 - [ ] Payments

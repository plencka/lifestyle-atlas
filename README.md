# lifestyle-atlas
TODO: An app that will help you improve your habits.

## Installation
To get started, run the following commands in the root directory of the cloned local repository:

You might want to clone repository using UNIX related command line. Powershell caused issues with file formatting.

### 1. Configure environment
Copy example environment file. Adjust it to your requirements or leave it unmodified:
```shell script
cp .env.example .env
```

### 2. Install dependencies
Run the following shell script to install application dependencies:
```shell script
./composer-install.sh
```

### 3. Run containers
To build and run containers:
```shell script
./vendor/bin/sail up
```

### 4. Generate an app key
Your application will not run properly without a key. To generate it, run:
```shell script
./vendor/bin/sail artisan key:generate
```

### 5. Create an alias for `sail`
Optional: To avoid typing `./vendor/bin/sail` each time, you can shorten it to `sail` with:
```shell script
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

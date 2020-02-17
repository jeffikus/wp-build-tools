# Clear the screen
clear

# UI init
echo "===================================================="
echo "|             --  WordPress Design  --             |"
echo "|              -- Theme Build Tool --              |"
echo "|           --     Version 0.1.0      --           |"
echo "===================================================="
echo "Enter the name of your new theme:"

# Get Child Theme Name from user
read rawthemename

# Make sure the theme name is lowercase and replace whitespace with dashes
themename=$(echo "$rawthemename" | tr '[:upper:]' '[:lower:]')
themename=${themename// /-};
themenamevariation=${themename//-/_};
themeuppervariation=${rawthemename// /_};

# Make Child Theme directory
mkdir -p ../../$themename/sass
echo "Creating child theme in folder: $themename"

# Copy SASS and package files from Design System
echo "Building your child theme...."

# Find and replace - names and descriptions
# Find and replace - file paths
# Find and replace - main stylesheet
# Find and replace - editor stylesheet
# Find and replace - print stylesheet
# Find and replace - package file
# Find and replace - functions file

# Install NPM packages inside Child Theme
echo "This may take a minute or two...."
# Build Child Theme CSS for the first time
# Force RTL build

# Exit UI
echo "Done! You can start coding in: $themename"
echo "===================================================="
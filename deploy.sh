- name: Deploy to EC2
  env:
    EC2_HOST: ${{ secrets.EC2_HOST }}
    EC2_USER: ${{ secrets.EC2_USER }}
    EC2_KEY: ${{ secrets.EC2_KEY }}
  run: |
    echo "$EC2_KEY" > private_key.pem
    chmod 600 private_key.pem

    # SSH into EC2 and run the deploy script
    ssh -o StrictHostKeyChecking=no -i private_key.pem $EC2_USER@$EC2_HOST << 'EOF'
      # Change to your project directory (replace with actual directory if needed)
      cd /var/www/html/textcmp || exit 1

      # Ensure the deploy.sh file is available
      if [ ! -f deploy.sh ]; then
        echo "deploy.sh file not found. Please check your repository."
        exit 1
      fi

      # Make deploy.sh executable if not already
      chmod +x deploy.sh

      # Execute the deploy script
      ./deploy.sh
    EOF

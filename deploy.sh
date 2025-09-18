- name: Deploy to EC2
  env:
    EC2_HOST: ${{ secrets.EC2_HOST }}
    EC2_USER: ${{ secrets.EC2_USER }}
    EC2_KEY: ${{ secrets.EC2_KEY }}
  run: |
    echo "$EC2_KEY" > private_key.pem
    chmod 600 private_key.pem
    ssh -o StrictHostKeyChecking=no -i private_key.pem $EC2_USER@$EC2_HOST << 'EOF'
      cd /var/www/html/testcmp  # Change to your project directory on EC2
      bash ./deploy.sh
    EOF

//Reference: modern operation system tanenbaum 2nd edition 

	#include<stdio.h>
	#include<unistd.h>
	#include<pthread.h>
	#include<semaphore.h>

	#define N 5              //number of philosphers
	#define LEFT (i-1)%N    //number of i's left neighbors
	#define RIGHT (i+1)%N   //number of i's right neighbors
	#define THINKING 0     //philosopher is currently thinking
	#define HUNGRY 1      // philosopher is currently hungry
	#define EATING 2      //philospher is currently eating


	int state[N];          //array to keep track of each and every philospher's state(state is defined in README)
	int philosophers[N];   //array to store philosphers

	sem_t mutex;        // mutual exclusion for critical regions
	sem_t phil[N];    // one semaphore per philospher

	void * philosopher(void *); // funtion declaration for philosopehr
	void take_forks(int);       //function declaration for taking forks
	void put_forks(int);       // function declaration for putting forks
	void test(int);           //funtion declaration for testing 

	int main(int argc,char **argv) //main function
		{
			int k;
			pthread_t tid[N]; //each thread 
			printf("Dining Phiosopher with no vulnerability from deadlock and starvation \n");
			for(k=0;k<N;k++)
				{
					philosophers[k]=k;
				}
			sem_init(&mutex,0,1);
			for(k=0;k<N;k++) sem_init(&phil[k],0,0);
			for(k=0;k<N;k++) pthread_create(&tid[k],NULL,philosopher,&philosophers[k]);
			for(k=0;k<N;k++) pthread_join(tid[k],NULL);
		}

	void * philosopher(void *param) // philosopher numbers
		{
			int i=*((int *)param);
			 //just for sleeping purpose
			

			while(1) // while true repeat forever
				{
					sleep(1); //sleep for 1-> think
					take_forks(i); //acquire two forks or block
					sleep(2); //sleep that  mean eat
					put_forks(i); //put forks on table
				}
		}

	void take_forks(int i) //try to grab forks 
		{
			sem_wait(&mutex); //enter critical region
			state[i]=HUNGRY; // store the information that philosopher i is hungry
			printf("Philosopher %d is hungry \n",i);
			test(i); // try to acquire two forks
			sem_post(&mutex); //exit critical region 
			sem_wait(&phil[i]); //block if forks are not  acquired
		}

	void put_forks(int i) // put forks as no other fork is found
		{
			sem_wait(&mutex); //entering critical region
			state[i]=THINKING; //philosopher has fininshed eating
			printf("Philosopher %d is thinking \n",i);
			test(LEFT); //see if left neighbor can now eat
			test(RIGHT); //see if right neighbor can now eat
			sem_post(&mutex);
		}

	void test(int i) //philosopher number from 0 to N-1
		{
			if(state[i]==HUNGRY && state[LEFT]!=EATING && state[RIGHT]!=EATING){
			state[i]=2;
			printf("Philosopher %d is eating \n",i);
			sem_post(&phil[i]);
		}
	}
